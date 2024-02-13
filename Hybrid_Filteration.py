#!/usr/bin/env python
# coding: utf-8

# In[1]:


import pandas as pd
import numpy as np
import sys
from sklearn.metrics.pairwise import cosine_similarity
from sklearn.preprocessing import StandardScaler
from sklearn.neighbors import NearestNeighbors

# Global variables to hold preprocessed data and trained model
data_read = None
preprocessed_data = None
knn = None
Scaler = None



# In[7]:


def read_data():
    data = pd.read_excel(r"C:/xampp/htdocs/Exercise.xlsx", usecols= ['weight2', 'htin4', 'exract11'])
    global data_read
    data_read = data
    
# In[3]:


def preprocess_data():
    #drop any missing value
    data_exercise = data_read.dropna()
    #add age column and randomize since the dataset doesn't provide an age column
    data_exercise['age'] = np.random.randint(15, 65, data_exercise.shape[0])
    #convert weight to KG and height to CM
    data_exercise['weight2'] = data_exercise['weight2'] * 0.453592
    data_exercise['htin4'] = data_exercise['htin4'] *  2.54
    #one-hot encoding the exercise
    data_exercise_preprocessed = pd.get_dummies(data_exercise, columns=['exract11'])
    global preprocessed_data
    preprocessed_data = data_exercise_preprocessed


# In[9]:


def train_data():
    # Content-based filtering: Scale and combine user features
    scaler = StandardScaler()
    user_features = preprocessed_data[['age', 'htin4', 'weight2']]
    user_features = scaler.fit_transform(user_features)
    # Collaborative filtering: Use k-Nearest Neighbors to find similar users
    knn_model = NearestNeighbors(n_neighbors=3, metric='cosine')
    knn_model.fit(user_features)
    global knn, Scaler
    knn = knn_model
    Scaler = scaler


# In[11]:


# Function to recommend exercise based on user's features
def recommend_exercise(new_user_data):
    user_exercise = pd.DataFrame(0, index=[0], columns=preprocessed_data.columns.difference(['age', 'htin4', 'weight2']))
    
    # Scale user features
    user_features_scaled = Scaler.transform(new_user_data)

    # Find similar users using k-Nearest Neighbors
    _, indices = knn.kneighbors(user_features_scaled)

    # Get exercise preferences of similar users
    similar_users = preprocessed_data.iloc[indices[0]]
    mean_exercise_preferences = similar_users.drop(['age', 'htin4', 'weight2'], axis=1).mean()

    # Combine content-based and collaborative filtering
    hybrid_recommendations = (mean_exercise_preferences + user_exercise) / 2

    # Calculate percentage match for each exercise
    total_match = hybrid_recommendations.sum(axis=1)
    percentage_match = (total_match / len(hybrid_recommendations.columns))

    # Combine exercise names and percentage match
    recommendations = pd.DataFrame({
        'Exercise': hybrid_recommendations.idxmax(axis=1),
        'Percentage_Match': percentage_match
    })

    # Sort by percentage match in descending order
    recommendations = recommendations.sort_values(by='Percentage_Match', ascending=False)

    return recommendations



def setup():
    # Read data from the file
    read_data()

    # Preprocess the data
    preprocess_data()
    
    # Train the model
    train_data()
    
if __name__ == "__main__":
    setup()
    








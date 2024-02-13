# your_flask_app.py

from flask import Flask, request, jsonify, redirect
import pandas as pd
from Hybrid_Filteration import recommend_exercise, setup  # Import your Python functions

app = Flask(__name__)

# Endpoint to receive input data and return recommendations
@app.route('/recommend')
def get_recommendation():
    # Setup global variables (if necessary)
    setup()

    # Call the recommend function with the input data
    new_user_data = {'age': [26], 'htin4': [163], 'weight2': [60]}
    new_user_df = pd.DataFrame(new_user_data)
    recommendations = recommend_exercise(new_user_df)
    recommendation_dict = recommendations.to_dict(orient='records')
    # Return recommendations as JSON
    print(jsonify({"recommendations": recommendation_dict}))

if __name__ == '__main__':
    app.run(debug=True)
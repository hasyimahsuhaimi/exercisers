
import pandas as pd
from Hybrid_Filteration import recommend_exercise, setup

#setup the global variable
setup()

#Call the recommendation function
new_user_data = {'age': [26], 'htin4': [163], 'weight2': [60]}
new_user_df = pd.DataFrame(new_user_data)
recommendations = recommend_exercise(new_user_df)

# Print or use the recommendations as needed
print(recommendations)
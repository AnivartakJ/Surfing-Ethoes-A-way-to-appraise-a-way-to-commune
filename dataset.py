#DataFrame
# As a string
#json_data = profile.to_json()
import pandas as pd 
from pandas_profiling import ProfileReport

#location of file which we want to import from exel.


df = pd.read_csv('C:\\Users\\Ani\\OneDrive\\Desktop\\dataset.csv')
print(df)


#Generate a report

# As a file
#profile.to_file("your_report.json")
profile = ProfileReport(df)

#for summarizing dataset use this

#profile = ProfileReport(large_dataset, minimal=True)
#profile.to_file("output.html")

#for small dataset use this

profile.to_file(output_file = "Database.html")
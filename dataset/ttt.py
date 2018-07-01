import csv

states = ['gegeg' , 'egt']
caps = ['frere' , 'rewg' ]

with open('n.csv' , 'a', newline='') as f:
    w = csv.writer(f, delimiter=',')
    for i in range(len(states)):
        w.writerow([states[i], caps[i]])




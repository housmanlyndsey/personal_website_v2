#!/usr/bin/python

import csv
import cgi

def htmlTop():
	print("""Content-type:text/html\n\n"
		<!DOCTYPE html>
		<html lang="en">
			<head>
				<Title> Pokemon Go Opponent Matchup </Title>
			</head>
			<body>""")

def htmlTail():
	print ("""</body></html>""")

def getData():
	form = cgi.FieldStorage()
	opponent = form.getvalue('opponent')
	return opponent

f_in = open('PokemonGo_Types.csv', 'r')
inputfile = csv.DictReader(f_in)


TypeDict1 = {}
Effective1 = []
Ineffective1 = []

for row in inputfile:
	PokemonType = row['Type']
	Effective1 = [row['More Effective Against']]
	Ineffective1 = [row['Less Effective Against']]

	key_value = {PokemonType:[Effective1, Ineffective1]}

	if PokemonType in TypeDict1:
		TypeDict1[PokemonType][0].append(Effective1)
		TypeDict1[PokemonType][1].append(Ineffective1)
	else:
		TypeDict1.update(key_value)

# Trying to remove blanks
# for type in TypeDict1:
# 	print type,":"
# 	for list in TypeDict1[type]:
# 		print list

f_in = open('PokemonGo_Types2.csv','r')
inputfile = csv.DictReader(f_in)

TypeDict2 = {}
More_Damage_Against = []
Less_Damage_Against = []

for row in inputfile:
    PokemonType = row['Type']
    More_Damage_Against = [row['2x Damage From']]
    Less_Damage_Against = [row['Half Damage From']]
    print row


    key_value = {PokemonType:[More_Damage_Against, Less_Damage_Against]}

    if PokemonType in TypeDict2:
		TypeDict2[PokemonType][0].append(row['2x Damage From'])
		TypeDict2[PokemonType][1].append(row['Half Damage From'])
    else:
		TypeDict2.update(key_value)

if __name__ == "__main__":
	try:
		htmlTop()
		opponent = getData()

		print "<H2> Your opponent's Pokemon type is...",opponent+".</H2>"
		print "<H4> Use: </H4>"
		for option in TypeDict2[opponent][0]:
		    if option != ['']:
		        print "<li>",option, "</li>"

		htmlTail()
	except:
		cgi.print_exception()

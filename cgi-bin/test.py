#!/usr/bin/python

import cgi, cgitb
cgitb.enable()

def htmlTop():
	print("""Content-type:text/html\n\n"
		<!DOCTYPE html>
		<html lang="en">
			<head>
				<Title> Pokemon Go Opponent Matchup </Title>
			</head>
			<body>""")

def htmlTail():
	print ("</body></html>")

def getData():
	form = cgi.FieldStorage()
	opponent = form.getvalue('opponent')
	return opponent

#main program
if __name__ == "__main__":
	try:
		htmlTop()
		opponent = getData()
		print "Opponent name:",opponent
		htmlTail()
	except:
		cgi.print_exception()

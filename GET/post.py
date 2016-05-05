#-*- coding: utf-8 -*-
import time
from facepy import GraphAPI

api = "EAACEdEose0cBADt8pZCZAlCHuz9w3uuXZAFGUD7FHCVwF6ibE4HPwwOBqeSNtaSyeG0GVNrBog1cZBqJ8azgZCbEc5JVXMPq0RtkZBnsEbqRjf4RZBGDG4o8W7Uj7ZAwmrpFNX60ZCVSaUiecB3kBmSaBJEUNJ4cg7aN0zFPwZAhqkyWQvYihZAzENVvnm8QwuZA032MoOEKExGVLwZDZD"

graph = GraphAPI(api)

message = '''

TEST MESSAGE

'''

groups = ['1775201989358342']

for group_id in groups:
	print "Posting to " + 'http://www.facebook.com/groups/' + str(group_id)

	graph.post(path =str(group_id) + '/feed', message=message)

	time.sleep(10)
print "Done"

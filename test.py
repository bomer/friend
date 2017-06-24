#!/usr/bin/python

import requests
import re

url = 'https://www.facebook.com/jimmeyotoole'
idre = re.compile('"entity_id":"([0-9]+)"')
page = requests.get(url)
print(idre.findall(page.content.decode()))

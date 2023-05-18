# -*- coding: utf-8 -*-
 
import os, sys
sys.path.insert(0, '/home/a/andret69/andret69.beget.tech/rjs')
sys.path.insert(1, '/home/a/andret69/andret69.beget.tech/djangoenv/lib/python3.8/site-packages')
os.environ['DJANGO_SETTINGS_MODULE'] = 'rjs.settings'
from django.core.wsgi import get_wsgi_application
application = get_wsgi_application()
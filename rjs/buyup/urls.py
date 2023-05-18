from django.urls import path
from .views import *

urlpatterns = [
    path('', index, name='home'),
    path('<slug:slug>/', get_page, name='page')
]

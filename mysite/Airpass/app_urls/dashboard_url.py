from django.urls import include, path, re_path
from Airpass.views import home


urlpatterns = [
    path('', home, name = 'home'),
]

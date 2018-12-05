from django.contrib import admin
from django.urls import include, path
from Airpass.app_views.beacons_views import *


urlpatterns = [
    path('beacon/', beacon, name = 'beacon'),
    path('beacon/add_new_beacon', anb, name = 'add_new_beacon'),
    path('beacon/store_new_beacon', store_new_beacon, name = 'store_new_beacon'),
    path('beacon/confirm_beacon/<int:id>', delete_b_v, name = 'view_delete_beacon'),
    path('beacon/delete_beacon/<int:id>', delete_beacon, name = 'delete_beacon'),
    path('beacon/edit_beacon/<int:id>', update_b_v, name='view_update_beacon'),
    path('beacon/updating_beacon/<int:id>', update_beacon, name='update_beacon'),
]
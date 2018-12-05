from django.urls import include, path, re_path
from Airpass.app_views.readers_views import *


urlpatterns = [
    path('reader/', reader, name = 'reader'),
    path('reader/add_new_reader/', anr, name = 'add new reader'),
    path('reader/store_new_reader/', store_new_reader, name = 'store_new_reader'),
    path('reader/confirm_reader/<int:id>', delete_r_v, name = 'view_delete_reader'),
    path('reader/delete_reader/<int:id>', delete_reader, name = 'delete_reader'),
    path('reader/edit_reader/<int:id>', update_r_v, name = 'view_update_reader'),
    path('reader/updating_reader/<int:id>', update_reader, name = 'update_reader'),
]
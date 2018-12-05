from django.db import models
from django.utils import  timezone
# Create your models here.

class BaseModel(models.Model):
    created_at = models.DateTimeField(auto_now_add=True)
    modified_at = models.DateTimeField(auto_now=True)

    class Meta:
        abstract = True

class readers(BaseModel):
    # reader_id = models.CharField(max_length=30)
    r_name = models.CharField(max_length=30)
    mac_add = models.CharField(max_length=30)

    def __str__(self):
        return self.r_name

# class ReaderFeed(BaseModel):
#     reader_mac = models.CharField(max_length=200)
#     beacon_mac = models.CharField(max_length=200)
#     reader_id = models.ForeignKey('Reader',related_name='reader',on_delete=models.SET_NULL,null=True)
#     beacon_id = models.ForeignKey('Beacon',related_name='beacon',on_delete=models.SET_NULL,null=True)
#     battery_level = models.CharField(max_length=200, null=True)
#     signal_strength = models.CharField(max_length=200, null=True)
#     signal_power = models.CharField(max_length=200, null=True)

class beacons(BaseModel):
    # beacon_id = models.CharField(max_length=30)
    b_name = models.CharField(max_length=30)
    mac_add = models.CharField(max_length=30)

    def __str__(self):
        return self.b_name



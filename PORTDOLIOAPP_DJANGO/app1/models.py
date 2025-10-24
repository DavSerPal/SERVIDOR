from django.db import models

# Create your models here.
class User(models.Model):
    name = models.CharField(max_length = 64, verbose_name = "Name", null = False, blank = False)
    password = models.CharField(max_length = 64, verbose_name = "Password", null = False, blank = False)
    email = models.CharField(max_length = 64, verbose_name = "Email", null = False, blank = False)
from django.contrib import admin
from .models import Libros, Versiculo, Testamento


admin.site.register(Versiculo)
admin.site.register(Libros)
admin.site.register(Testamento)
from django.shortcuts import render
from django.core import serializers
from django.http import HttpResponse
from django.views.generic import TemplateView
from .models import Libros, Versiculo

class VistaPrincipal(TemplateView):
    template_name = "index.html"

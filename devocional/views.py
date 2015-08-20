from django.shortcuts import render
from django.core import serializers
from django.http import HttpResponse
from django.views.generic import TemplateView


class VistaPrincipal(TemplateView):
    template_name = "../templates/index.html"
from django.conf.urls import patterns, url
from .views import VistaPrincipal

urlpatterns = patterns(
    url(r'^index/', VistaPrincipal.as_view()),
    #url(r'^x/', Reguistrolibros),
)

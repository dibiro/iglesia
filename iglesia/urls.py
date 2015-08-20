from django.conf.urls import patterns, include, url
from biblia.views import VistaPrincipal
from django.contrib import admin
admin.autodiscover()

urlpatterns = patterns('',
    # Examples:
    # url(r'^blog/', include('blog.urls')),

    url(r'^$', VistaPrincipal.as_view()),
    url(r'^admin/', include(admin.site.urls)),
    #url(r'^biblia/', include(biblia.urls)),
)

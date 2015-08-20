from django.db import models

class Testamento(models.Model):
    nombre =models.CharField(max_length=20)

    def __unicode__(self):
        return self.nombre


class Libros(models.Model):
    nombre = models.CharField(max_length=50)
    testamento = models.ForeignKey(Testamento)
    
    def __unicode__(self):
        return self.nombre


class Versiculo(models.Model):
    texto = models.CharField(max_length=255)
    capitulo = models.IntegerField()
    versiculo = models.IntegerField()
    libro = models.ForeignKey(Libros)

    def __unicode__(self):

        return "id: %s Testmento: %s libro: %s Capitulo: %s Versiculo: %s Texto: %s" % (self.id, self.libro.testamento, self.libro.nombre, self.capitulo, self.versiculo, self.texto)

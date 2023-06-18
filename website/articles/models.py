from django.db import models


class Article(models.Model):
    title = models.CharField(max_length=255)
    slug = models.SlugField()
    body = models.TextField()
    date = models.DateTimeField(auto_now_add=True)
    thumb = models.ImageField(default="default.jpg", blank=True)
    published = models.BooleanField(default=False)

    def __str__(self):
        return self.title

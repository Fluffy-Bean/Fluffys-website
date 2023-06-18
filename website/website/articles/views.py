from django.shortcuts import render, get_object_or_404
from django.http import HttpResponse
from articles.models import Article


def article_list(request):
    articles = Article.objects.filter(published=True).order_by("-date").all()
    return render(request, "views/articles.html", {"articles": articles})


def article_detail(request, slug):
    article = get_object_or_404(Article, slug=slug)

    if not article.published:
        return HttpResponse("Not found")

    return render(request, "views/article.html", {"article": article})

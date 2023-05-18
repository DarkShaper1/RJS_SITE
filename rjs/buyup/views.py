from django.shortcuts import render, get_object_or_404
from .models import *
from .parser import parser
# from django.views.decorators.cache import cache_page


def index(request):
    content = IndexPage.objects.get(title='Главная').content
    slides = Slide.objects.all()
    parser()
    return render(request, 'buyup/index.html', {'slides': slides, 'content': content})


def get_page(request, slug):
    parser()
    cards = Cards.objects.filter(page__slug=slug).order_by('id')
    content = get_object_or_404(Pages, slug=slug)
    return render(request, 'buyup/gold.html', {'cards': cards, 'content': content.content})
    

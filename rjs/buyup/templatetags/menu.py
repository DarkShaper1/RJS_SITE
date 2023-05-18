from django import template
from buyup.models import Pages

register = template.Library()


@register.inclusion_tag('buyup/menu_tpl.html')
def show_menu():
    pages = Pages.objects.all()
    return {'pages': pages}

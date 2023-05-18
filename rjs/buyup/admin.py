from django import forms
from django.contrib import admin
from .models import *
from ckeditor_uploader.widgets import CKEditorUploadingWidget


class PageAdminForm(forms.ModelForm):
    content = forms.CharField(widget=CKEditorUploadingWidget(), required=False)

    class Meta:
        model = Pages
        fields = '__all__'
        widgets = {
        	'unit': forms.RadioSelect()
        }


class IndexPageAdminForm(forms.ModelForm):
    content = forms.CharField(widget=CKEditorUploadingWidget())

    class Meta:
        model = IndexPage
        fields = '__all__'


class PagesAdmin(admin.ModelAdmin):
    form = PageAdminForm
    prepopulated_fields = {'slug': ('title',)}
    save_as = True
    save_on_top = True
    list_display = ('id', 'title', 'slug')
    list_display_links = ('id', 'title')
    search_fields = ('title',)
    fields = ('title', 'slug', 'content')


class CardsAdmin(admin.ModelAdmin):
    save_on_top = True
    save_as = True
    list_display = ('id', 'title', 'price','get_price', 'page')
    list_display_links = ('id', 'title')
    list_editable = ('price',)
    search_fields = ('title',)
    list_filter = ('page',)
    fields = ('title', 'photo', 'price', 'used_price', 'unit', 'postscript', 'page')


class SlideAdmin(admin.ModelAdmin):
    save_on_top = True
    save_as = True
    list_display = ('id', 'text', 'photo')
    list_display_links = ('id',)


class CustomFieldsAdmin(admin.ModelAdmin):
    save_on_top = True
    save_as = True
    list_display = ('id', 'slug', 'text')
    list_display_links = ('id', 'slug')
    search_fields = ('slug',)


class IndexPageAdmin(admin.ModelAdmin):
    form = IndexPageAdminForm
    list_display = ('id', 'title', 'url')
    list_display_links = ('id', 'title')


admin.site.register(Pages, PagesAdmin)
admin.site.register(Cards, CardsAdmin)
admin.site.register(Slide, SlideAdmin)
admin.site.register(CustomFields, CustomFieldsAdmin)
admin.site.register(IndexPage, IndexPageAdmin)

from django.db import models
from django.urls import reverse


class CustomFields(models.Model):
    slug = models.SlugField(max_length=255, verbose_name='name', unique=True)
    text = models.CharField(max_length=255)


class Pages(models.Model):
    title = models.CharField(max_length=255)
    slug = models.SlugField(max_length=255, verbose_name='Url', unique=True)
    content = models.TextField(blank=True)

    def get_absolute_url(self):
        return reverse('page', kwargs={'slug': self.slug})

    def __str__(self):
        return self.title

    class Meta:
        verbose_name = 'Страница'
        verbose_name_plural = 'Страницы'


class Cards(models.Model):
    title = models.CharField(max_length=255)
    photo = models.ImageField(upload_to='photos/%Y/%m/%d', blank=True)
    price = models.CharField(max_length=255)
    used_price = models.CharField(max_length=255, blank=True)
    postscript = models.TextField(blank=True)
    page = models.ForeignKey(Pages, on_delete=models.PROTECT)
    TYPE_SELECT = (
        ('грамм', 'Грамм'),
        ('килограмм', 'Килограмм'),
        ('штуку', 'Штуку'),
    )
    unit = models.CharField(max_length=11, choices=TYPE_SELECT, blank=True)

    def get_price(self):
        stroke = str(self.price)
        if stroke.find('%gold%') >= 0 or stroke.find('%silver%') >= 0 or stroke.find('%platina%') >= 0 or stroke.find('%palad%') >= 0:
            stroke = stroke.replace(',', '.')
            if stroke.find('%gold%') >= 0:
                gold = str(CustomFields.objects.get(slug='gold').text)
                stroke = stroke.replace('%gold%', gold).strip()
            if stroke.find('%silver%') >= 0:
                gold = str(CustomFields.objects.get(slug='silver').text)
                stroke = stroke.replace('%silver%', gold).strip()
            if stroke.find('%platina%') >= 0:
                gold = str(CustomFields.objects.get(slug='platina').text)
                stroke = stroke.replace('%platina%', gold).strip()
            if stroke.find('%palad%') >= 0:
                gold = str(CustomFields.objects.get(slug='palad').text)
                stroke = stroke.replace('%palad%', gold).strip()
            try:
            	stroke = eval(compile(stroke, 'string', 'eval'))
            	stroke = str(int(stroke))
            except Exception:
            	stroke = 'error'
        stroke += ' руб.'
        return stroke

    def get_used_price(self):
        stroke = str(self.used_price)
        if stroke.find('%gold%') >= 0 or stroke.find('%silver%') >= 0 or stroke.find('%platina%') >= 0 or stroke.find('%palad%') >= 0:
            stroke = stroke.replace(',', '.')
            if stroke.find('%gold%') >= 0:
                gold = str(CustomFields.objects.get(slug='gold').text)
                stroke = stroke.replace('%gold%', gold).strip()
            if stroke.find('%silver%') >= 0:
                gold = str(CustomFields.objects.get(slug='silver').text)
                stroke = stroke.replace('%silver%', gold).strip()
            if stroke.find('%platina%') >= 0:
                gold = str(CustomFields.objects.get(slug='platina').text)
                stroke = stroke.replace('%platina%', gold).strip()
            if stroke.find('%palad%') >= 0:
                gold = str(CustomFields.objects.get(slug='palad').text)
                stroke = stroke.replace('%palad%', gold).strip()
            try:
            	stroke = eval(compile(stroke, 'string', 'eval'))
            	stroke = str(int(stroke))
            except Exception:
            	stroke = 'error'
        stroke += ' руб.'
        return stroke

    def __str__(self):
        return self.title

    class Meta:
        verbose_name = 'Карточка'
        verbose_name_plural = 'Карточки'


class Slide(models.Model):
    text = models.CharField(max_length=255)
    photo = models.ImageField(upload_to='photos/%Y/%m/%d')

    class Meta:
        verbose_name = 'Слайд'
        verbose_name_plural = 'Слайды'

    def __str__(self):
        return 'Слайд' + str(self.id)


class IndexPage(models.Model):
    title = models.CharField(max_length=255)
    url = models.CharField(max_length=255)
    content = models.TextField(blank=True)

    class Meta:
        verbose_name = 'Основная страница'
        verbose_name_plural = 'Основные страницы'

    def __str__(self):
        return self.title

from bs4 import BeautifulSoup
import datetime
import requests
from .models import CustomFields


def parser():
    date = CustomFields.objects.get(slug='date')
    datetext = date.text
    now = datetime.datetime.now()
    if datetext != str(now.day) and now.hour >= 12:
        url = 'https://gold-metal.ru/'
        response = requests.get(url)
        soup = BeautifulSoup(response.text, 'html.parser')

        quotes = soup.find('div', class_='AdvancedText')
        course = quotes.text
        gold = course.partition('1 г золота ')[2]
        gold = gold.partition(' руб.')[0]
        gold = gold.replace('—', '').strip()
        silver = course.partition('1 г серебра ')[2]
        silver = silver.partition(' руб.')[0]
        silver = silver.replace('—', '').strip()
        platina = course.partition('1 г платины ')[2]
        platina = platina.partition(' руб.')[0]
        platina = platina.replace('—', '').strip()
        palad = course.partition('1 г палладия ')[2]
        palad = palad.partition(' руб.')[0]
        palad = palad.replace('—', '').strip()
        goldmodel = CustomFields.objects.get(slug='gold')
        goldmodel.text = float(gold)
        goldmodel.save()
        silvermodel = CustomFields.objects.get(slug='silver')
        silvermodel.text = float(silver)
        silvermodel.save()
        platinamodel = CustomFields.objects.get(slug='platina')
        platinamodel.text = float(platina)
        platinamodel.save()
        paladmodel = CustomFields.objects.get(slug='palad')
        paladmodel.text = float(palad)
        paladmodel.save()
        date.text = str(now.day)
        date.save()

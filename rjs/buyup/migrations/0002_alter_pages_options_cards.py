# Generated by Django 4.1.1 on 2022-09-26 15:18

from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    dependencies = [
        ('buyup', '0001_initial'),
    ]

    operations = [
        migrations.AlterModelOptions(
            name='pages',
            options={'ordering': ['title'], 'verbose_name': 'Страница', 'verbose_name_plural': 'Страницы'},
        ),
        migrations.CreateModel(
            name='Cards',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('title', models.CharField(max_length=255)),
                ('price', models.CharField(max_length=255)),
                ('postscript', models.TextField(blank=True)),
                ('page', models.ForeignKey(on_delete=django.db.models.deletion.PROTECT, to='buyup.pages')),
            ],
            options={
                'verbose_name': 'Карточка',
                'verbose_name_plural': 'Карточки',
                'ordering': ['title'],
            },
        ),
    ]

# Generated by Django 4.1.1 on 2022-09-27 10:50

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('buyup', '0004_customfields_slide_alter_cards_options_and_more'),
    ]

    operations = [
        migrations.CreateModel(
            name='IndexPage',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('title', models.CharField(max_length=255)),
                ('url', models.URLField()),
                ('content', models.TextField(blank=True)),
            ],
        ),
    ]

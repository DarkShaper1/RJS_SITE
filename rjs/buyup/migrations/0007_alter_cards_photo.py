# Generated by Django 4.0.7 on 2023-02-24 19:18

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('buyup', '0006_alter_indexpage_options_alter_indexpage_url'),
    ]

    operations = [
        migrations.AlterField(
            model_name='cards',
            name='photo',
            field=models.ImageField(blank=True, upload_to='photos/%Y/%m/%d'),
        ),
    ]

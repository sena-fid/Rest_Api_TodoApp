Bu bir Todo App Api örneğidir.

http://localhost:8000/api/register    name, email ve password alanları ile tetiklenmelidir.
http://localhost:8000/api/login    için email ve password bilgilerinizi gönderiniz.

Giriş yaptığınızda verilen token ile birlikte;

http://localhost:8000/api/todo/store  bu route ile todo ekleme işlemi yapabilirsiniz.
todo ekleme işleminde yalnızca title göndermeniz yeterlidir. Kaydedilen verinin statusu default olarak 'Bekliyor' konumundadır.

http://localhost:8000/api/todo/update/{id}  ile eklemiş olduğunuz veriyi güncelleyebilirsiniz.
http://localhost:8000/api/todo/destroy/{id}  ile eklenen veriyi silebilirsiniz.
http://localhost:8000/api/todo/update-status/{id}  ile daha önceden eklemiş olduğunuz verinin durumunu 'Bekliyor' konumundan 'Tamamlandı' olarak değiştirebilirsiniz, yalnızca 'status':'Tamamlandı' olarak göndermeniz yeterlidir.
http://localhost:8000/api/todo/search/{data}  ile todo tablosundaki herhangi bir verinin title yada statusuna göre search yapabilirsiniz.

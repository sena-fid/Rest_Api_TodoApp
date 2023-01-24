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


{
	"info": {
		"_postman_id": "5e9b24ef-be9f-49b5-a85a-00ad49153f41",
		"name": "todo api",
		"schema": "https://schema.getpostman.com/json/collection/v2.1.0/collection.json",
		"_exporter_id": "23182805"
	},
	"item": [
		{
			"name": "http://localhost:8000/api/todo/get/1",
			"request": {
				"method": "GET",
				"header": []
			},
			"response": []
		},
		{
			"name": "http://localhost:8000/api/todo/gets",
			"request": {
				"method": "GET",
				"header": []
			},
			"response": []
		},
		{
			"name": "http://localhost:8000/api/todo/store",
			"request": {
				"method": "GET",
				"header": []
			},
			"response": []
		},
		{
			"name": "http://localhost:8000/api/todo/update/2",
			"request": {
				"method": "GET",
				"header": []
			},
			"response": []
		},
		{
			"name": "http://localhost:8000/api/todo/destroy/3",
			"request": {
				"method": "GET",
				"header": []
			},
			"response": []
		},
		{
			"name": "http://localhost:8000/api/todo/update-status/1",
			"request": {
				"method": "GET",
				"header": []
			},
			"response": []
		},
		{
			"name": "http://localhost:8000/api/todo/search/todo",
			"request": {
				"method": "POST",
				"header": [],
				"url": {
					"raw": "http://localhost:8000/api/todo/search/ta",
					"protocol": "http",
					"host": [
						"localhost"
					],
					"port": "8000",
					"path": [
						"api",
						"todo",
						"search",
						"ta"
					]
				}
			},
			"response": []
		},
		{
			"name": "register",
			"request": {
				"method": "GET",
				"header": []
			},
			"response": []
		}
	]
}

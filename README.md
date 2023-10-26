# apicaja
 Api Restfull para una aplicación de control de efectivo en caja

 rutas:
CRUD:
 api/payments

[POST]

ejemplo de body (JSON)

{
        "date" : "2023-10-19",
        "local_amount": 656181.54,
        "concept":"UN concepto divino 3",
        "account":"706205"
    }

CRUD:
api/incomes/

ejemplo de body (JSON)

{
        "date" : "2023-10-19",
        "local_amount": 656181.54,
        "concept":"UN concepto divino 3",
        "account":"706205"
    }

GET:

api/reports/cash

ejemplo de response

{
    "status": 1,
    "balances": [
        {
            "id": 50,
            "amount_in": 0,
            "amount_out": 656181.54,
            "amount_balance": -656181.54,
            "date": "2023-10-19 00:00:00",
            "concept": "UN concepto divino 3",
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 47,
            "amount_in": 7373738.32,
            "amount_out": 0,
            "amount_balance": 6717556.78,
            "date": "2023-10-21 00:00:00",
            "concept": "Ahora si",
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 48,
            "amount_in": 538917.54,
            "amount_out": 0,
            "amount_balance": 7256474.32,
            "date": "2023-10-21 00:00:00",
            "concept": "Ahora si",
            "created_at": null,
            "updated_at": null
        }
    ]
}
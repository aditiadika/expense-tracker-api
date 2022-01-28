# API For Create Expense Tracker

A simple api for create expense tracker, build with Laravel Sanctum.

## API Reference

#### Register

```http
  POST /api/auth/register
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `name` | `string` | **Required**. |
| `email` | `string` | **Required**. |
| `password` | `string` | **Required**. |
| `password_confirmation` | `string` | **Required**. |
| `device_name` | `string` | **Required**. |

#### Log in

```http
  POST /api/auth/login
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `email` | `string` | **Required**. |
| `password` | `string` | **Required**. |
| `device_name` | `string` | **Required**. |


#### Log out

```http
  POST /api/auth/logout
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `name`      | `string` | **Required**.|

#### Get Categories

```http
  GET /api/categories
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `Bearer Token` | `string` | **Required**. |

#### Get Category

```http
  GET /api/categories/{id}
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `id`      | `integer` | **Required**. Id of item to fetch |
| `Bearer Token` | `string` | **Required**. |

#### Create Categories

```http
  POST /api/categories
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `Bearer Token` | `string` | **Required**. |
| `name` | `string` | **Required**. |

#### Update Categories

```http
  PUT /api/categories/{id}
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `Bearer Token` | `string` | **Required**. |
| `id`      | `integer` | **Required**. Id of item to fetch |
| `name` | `string` | **Required**. |

#### Delete Categories

```http
  DELETE /api/categories/{id}
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `Bearer Token` | `string` | **Required**. |
| `id`      | `integer` | **Required**. Id of item to fetch |




#### Get Transactions

```http
  GET /api/transactions
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `Bearer Token` | `string` | **Required**. |

#### Get Transaction

```http
  GET /api/transactions/{id}
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `id`      | `integer` | **Required**. Id of item to fetch |
| `Bearer Token` | `string` | **Required**. |

#### Create Transaction

```http
  POST /api/transactions
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `Bearer Token` | `string` | **Required**. |
| `category_id` | `integer` | **Required**. |
| `transaction_date` | `date` | **Required**. |
| `amount` | `numeric` | **Required**. |
| `description` | `string` | **Required**. |

#### Update Transaction

```http
  PUT /api/transactions/{id}
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `Bearer Token` | `string` | **Required**. |
| `id`      | `integer` | **Required**. Id of item to fetch |
| `category_id` | `integer` | **Required**. |
| `transaction_date` | `date` | **Required**. |
| `amount` | `numeric` | **Required**. |
| `description` | `string` | **Required**. |

#### Delete Transaction

```http
  DELETE /api/transactions/{id}
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `Bearer Token` | `string` | **Required**. |
| `id`      | `integer` | **Required**. Id of item to fetch |




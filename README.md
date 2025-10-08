# API de Captura de Leads

API simples em Laravel para captura de leads interessados em kits.

## Endpoint

### Criar Lead
```
POST /api/leads
```

**Body:**
```json
{
  "nome": "João Silva",
  "email": "joao@email.com",
  "telefone": "(11) 99999-9999",
  "kit_interesse": "1"
}
```

**Resposta (201):**
```json
{
  "id": 1,
  "nome": "João Silva",
  "email": "joao@email.com",
  "telefone": "(11) 99999-9999",
  "kit_interesse": "1",
  "created_at": "2025-10-08T10:30:00.000000Z"
}
```

## Instalação

```bash
# Clone o repositório
git clone <url-do-repositorio>

# Instale as dependências
composer install

# Configure o .env
cp .env.example .env
php artisan key:generate

# Execute as migrations
php artisan migrate

# Inicie o servidor
php artisan serve
```

## Testando

Importe a collection do Postman incluída no repositório (`postman_collection.json`) para testar a API.

## Validações

- **nome**: obrigatório, string
- **email**: obrigatório, email válido, único
- **telefone**: obrigatório, string
- **kit_interesse**: obrigatório, valores aceitos: 1, 3 ou 5
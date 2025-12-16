``````mermaid
erDiagram
    USERS {
        bigint id PK
        string name
        string email
        string password
    }
    ROLES {
        bigint id PK
        string name
    }
    USER_ROLES {
        bigint user_id FK
        bigint role_id FK
    }
    STORES {
        bigint id PK
        string name
        string slug
        bigint owner_user_id FK
    }
    STORE_USERS {
        bigint id PK
        bigint store_id FK
        bigint user_id FK
        string role
    }
    CATEGORIES {
        bigint id PK
        string name
        string slug
        bigint store_id FK
        bigint parent_id FK
    }
    PRODUCTS {
        bigint id PK
        string name
        string slug
        string type
        bigint store_id FK
        string sku
        decimal price
    }
    PRODUCT_VARIANTS {
        bigint id PK
        bigint product_id FK
        string sku
        decimal price
    }
    INVENTORY {
        bigint id PK
        bigint product_id FK
        bigint product_variant_id FK
        int quantity
    }
    PRODUCT_IMAGES {
        bigint id PK
        string imageable_type
        bigint imageable_id
        string url
    }
    TAGS {
        bigint id PK
        string name
        string slug
    }
    PRODUCT_TAG {
        bigint product_id FK
        bigint tag_id FK
    }
    CARTS {
        bigint id PK
        bigint user_id FK
        string session_token
    }
    CART_ITEMS {
        bigint id PK
        bigint cart_id FK
        bigint store_id FK
        bigint product_id FK
        bigint product_variant_id FK
        int quantity
        decimal unit_price
    }
    COUPONS {
        bigint id PK
        bigint store_id FK
        string code
        string type
        decimal value
    }
    ORDERS {
        bigint id PK
        bigint store_id FK
        bigint user_id FK
        string order_number
        string status
        decimal subtotal
        decimal grand_total
    }
    ORDER_ITEMS {
        bigint id PK
        bigint order_id FK
        bigint product_id FK
        bigint product_variant_id FK
        int quantity
        decimal unit_price
    }
    PAYMENTS {
        bigint id PK
        bigint order_id FK
        string status
        decimal amount
        string method
    }
    SHIPMENTS {
        bigint id PK
        bigint order_id FK
        string status
        string tracking_number
    }
    ADDRESSES {
        bigint id PK
        string addressable_type
        bigint addressable_id
        string line1
        string city
        string country_code
    }
    REVIEWS {
        bigint id PK
        bigint user_id FK
        string reviewable_type
        bigint reviewable_id
        int rating
        string body
    }
    COMMENTS {
        bigint id PK
        bigint user_id FK
        string commentable_type
        bigint commentable_id
        bigint parent_id FK
        string body
    }
    PAYOUTS {
        bigint id PK
        bigint store_id FK
        decimal net_amount
        string status
    }
    PRODUCT_CATEGORY {
        bigint product_id FK
        bigint category_id FK
    }

    USERS ||--o{ USER_ROLES : ""
    ROLES ||--o{ USER_ROLES : ""
    USERS ||--o{ STORE_USERS : ""
    STORES ||--o{ STORE_USERS : ""
    STORES ||--o{ PRODUCTS : ""
    CATEGORIES ||--o{ PRODUCT_CATEGORY : ""
    PRODUCTS ||--o{ PRODUCT_CATEGORY : ""
    PRODUCTS ||--o{ PRODUCT_VARIANTS : ""
    PRODUCTS ||--o{ PRODUCT_IMAGES : ""
    PRODUCTS ||--o{ PRODUCT_TAG : ""
    TAGS ||--o{ PRODUCT_TAG : ""
    PRODUCTS ||--o{ INVENTORY : ""
    PRODUCT_VARIANTS ||--o{ INVENTORY : ""
    USERS ||--o{ CARTS : ""
    CARTS ||--o{ CART_ITEMS : ""
    STORES ||--o{ CART_ITEMS : ""
    PRODUCTS ||--o{ CART_ITEMS : ""
    PRODUCT_VARIANTS ||--o{ CART_ITEMS : ""
    STORES ||--o{ COUPONS : ""
    USERS ||--o{ ORDERS : ""
    STORES ||--o{ ORDERS : ""
    ORDERS ||--o{ ORDER_ITEMS : ""
    PRODUCTS ||--o{ ORDER_ITEMS : ""
    PRODUCT_VARIANTS ||--o{ ORDER_ITEMS : ""
    ORDERS ||--o{ PAYMENTS : ""
    ORDERS ||--o{ SHIPMENTS : ""
    ADDRESSES }o--o{ USERS : ""
    ADDRESSES }o--o{ STORES : ""
    ADDRESSES }o--o{ ORDERS : ""
    PRODUCTS ||--o{ REVIEWS : ""
    STORES ||--o{ REVIEWS : ""
    USERS ||--o{ REVIEWS : ""
    REVIEWS ||--o{ COMMENTS : ""
    PRODUCTS ||--o{ COMMENTS : ""
    STORES ||--o{ COMMENTS : ""
    USERS ||--o{ COMMENTS : ""
    COMMENTS ||--o{ COMMENTS : ""
    STORES ||--o{ PAYOUTS : ""
``````

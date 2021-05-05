# activity_types

## Description

<details>
<summary><strong>Table Definition</strong></summary>

```sql
CREATE TABLE `activity_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `account_id` int(10) unsigned NOT NULL,
  `activity_type_category_id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `translation_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `activity_types_account_id_foreign` (`account_id`),
  KEY `activity_types_activity_type_category_id_foreign` (`activity_type_category_id`),
  CONSTRAINT `activity_types_account_id_foreign` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `activity_types_activity_type_category_id_foreign` FOREIGN KEY (`activity_type_category_id`) REFERENCES `activity_type_categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
```

</details>

## Columns

| Name | Type | Default | Nullable | Extra Definition | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | --------------- | -------- | ------- | ------- |
| id | int(10) unsigned |  | false | auto_increment | [activities](activities.md) |  |  |
| account_id | int(10) unsigned |  | false |  |  | [accounts](accounts.md) |  |
| activity_type_category_id | int(10) unsigned |  | false |  |  | [activity_type_categories](activity_type_categories.md) |  |
| name | varchar(255) |  | true |  |  |  |  |
| translation_key | varchar(255) |  | true |  |  |  |  |
| location_type | varchar(255) |  | true |  |  |  |  |
| created_at | timestamp |  | true |  |  |  |  |
| updated_at | timestamp |  | true |  |  |  |  |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| activity_types_account_id_foreign | FOREIGN KEY | FOREIGN KEY (account_id) REFERENCES accounts (id) |
| activity_types_activity_type_category_id_foreign | FOREIGN KEY | FOREIGN KEY (activity_type_category_id) REFERENCES activity_type_categories (id) |
| PRIMARY | PRIMARY KEY | PRIMARY KEY (id) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| activity_types_account_id_foreign | KEY activity_types_account_id_foreign (account_id) USING BTREE |
| activity_types_activity_type_category_id_foreign | KEY activity_types_activity_type_category_id_foreign (activity_type_category_id) USING BTREE |
| PRIMARY | PRIMARY KEY (id) USING BTREE |

## Relations

![er](activity_types.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)
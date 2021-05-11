# public.stock_immediate_transfer

## Description

Immediate Transfer

## Columns

| Name | Type | Default | Nullable | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | -------- | ------- | ------- |
| id | integer | nextval('stock_immediate_transfer_id_seq'::regclass) | false | [public.stock_picking_transfer_rel](public.stock_picking_transfer_rel.md) |  |  |
| create_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Created by |
| create_date | timestamp without time zone |  | true |  |  | Created on |
| write_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Last Updated by |
| write_date | timestamp without time zone |  | true |  |  | Last Updated on |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| stock_immediate_transfer_create_uid_fkey | FOREIGN KEY | FOREIGN KEY (create_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| stock_immediate_transfer_write_uid_fkey | FOREIGN KEY | FOREIGN KEY (write_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| stock_immediate_transfer_pkey | PRIMARY KEY | PRIMARY KEY (id) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| stock_immediate_transfer_pkey | CREATE UNIQUE INDEX stock_immediate_transfer_pkey ON public.stock_immediate_transfer USING btree (id) |

## Relations

![er](public.stock_immediate_transfer.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)
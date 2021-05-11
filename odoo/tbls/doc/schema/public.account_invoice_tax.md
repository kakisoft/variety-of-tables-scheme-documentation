# public.account_invoice_tax

## Description

Invoice Tax

## Columns

| Name | Type | Default | Nullable | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | -------- | ------- | ------- |
| id | integer | nextval('account_invoice_tax_id_seq'::regclass) | false | [public.account_analytic_tag_account_invoice_tax_rel](public.account_analytic_tag_account_invoice_tax_rel.md) |  |  |
| invoice_id | integer |  | true |  | [public.account_invoice](public.account_invoice.md) | Invoice |
| name | varchar |  | false |  |  | Tax Description |
| tax_id | integer |  | true |  | [public.account_tax](public.account_tax.md) | Tax |
| account_id | integer |  | false |  | [public.account_account](public.account_account.md) | Tax Account |
| account_analytic_id | integer |  | true |  | [public.account_analytic_account](public.account_analytic_account.md) | Analytic account |
| amount | numeric |  | true |  |  | Tax Amount |
| amount_rounding | numeric |  | true |  |  | Amount Delta |
| manual | boolean |  | true |  |  | Manual |
| sequence | integer |  | true |  |  | Sequence |
| company_id | integer |  | true |  | [public.res_company](public.res_company.md) | Company |
| currency_id | integer |  | true |  | [public.res_currency](public.res_currency.md) | Currency |
| base | numeric |  | true |  |  | Base |
| create_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Created by |
| create_date | timestamp without time zone |  | true |  |  | Created on |
| write_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Last Updated by |
| write_date | timestamp without time zone |  | true |  |  | Last Updated on |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| account_invoice_tax_create_uid_fkey | FOREIGN KEY | FOREIGN KEY (create_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| account_invoice_tax_write_uid_fkey | FOREIGN KEY | FOREIGN KEY (write_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| account_invoice_tax_currency_id_fkey | FOREIGN KEY | FOREIGN KEY (currency_id) REFERENCES res_currency(id) ON DELETE SET NULL |
| account_invoice_tax_company_id_fkey | FOREIGN KEY | FOREIGN KEY (company_id) REFERENCES res_company(id) ON DELETE SET NULL |
| account_invoice_tax_account_analytic_id_fkey | FOREIGN KEY | FOREIGN KEY (account_analytic_id) REFERENCES account_analytic_account(id) ON DELETE SET NULL |
| account_invoice_tax_account_id_fkey | FOREIGN KEY | FOREIGN KEY (account_id) REFERENCES account_account(id) ON DELETE SET NULL |
| account_invoice_tax_tax_id_fkey | FOREIGN KEY | FOREIGN KEY (tax_id) REFERENCES account_tax(id) ON DELETE RESTRICT |
| account_invoice_tax_invoice_id_fkey | FOREIGN KEY | FOREIGN KEY (invoice_id) REFERENCES account_invoice(id) ON DELETE CASCADE |
| account_invoice_tax_pkey | PRIMARY KEY | PRIMARY KEY (id) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| account_invoice_tax_pkey | CREATE UNIQUE INDEX account_invoice_tax_pkey ON public.account_invoice_tax USING btree (id) |
| account_invoice_tax_invoice_id_index | CREATE INDEX account_invoice_tax_invoice_id_index ON public.account_invoice_tax USING btree (invoice_id) |

## Relations

![er](public.account_invoice_tax.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)
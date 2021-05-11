# public.account_analytic_tag_account_invoice_line_rel

## Description

RELATION BETWEEN account_invoice_line AND account_analytic_tag

## Columns

| Name | Type | Default | Nullable | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | -------- | ------- | ------- |
| account_invoice_line_id | integer |  | false |  | [public.account_invoice_line](public.account_invoice_line.md) |  |
| account_analytic_tag_id | integer |  | false |  | [public.account_analytic_tag](public.account_analytic_tag.md) |  |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| account_analytic_tag_account_invoi_account_analytic_tag_id_fkey | FOREIGN KEY | FOREIGN KEY (account_analytic_tag_id) REFERENCES account_analytic_tag(id) ON DELETE CASCADE |
| account_analytic_tag_account_invoi_account_invoice_line_id_fkey | FOREIGN KEY | FOREIGN KEY (account_invoice_line_id) REFERENCES account_invoice_line(id) ON DELETE CASCADE |
| account_analytic_tag_account__account_invoice_line_id_accou_key | UNIQUE | UNIQUE (account_invoice_line_id, account_analytic_tag_id) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| account_analytic_tag_account__account_invoice_line_id_accou_key | CREATE UNIQUE INDEX account_analytic_tag_account__account_invoice_line_id_accou_key ON public.account_analytic_tag_account_invoice_line_rel USING btree (account_invoice_line_id, account_analytic_tag_id) |
| account_analytic_tag_account_invoic_account_invoice_line_id_idx | CREATE INDEX account_analytic_tag_account_invoic_account_invoice_line_id_idx ON public.account_analytic_tag_account_invoice_line_rel USING btree (account_invoice_line_id) |
| account_analytic_tag_account_invoic_account_analytic_tag_id_idx | CREATE INDEX account_analytic_tag_account_invoic_account_analytic_tag_id_idx ON public.account_analytic_tag_account_invoice_line_rel USING btree (account_analytic_tag_id) |

## Relations

![er](public.account_analytic_tag_account_invoice_line_rel.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)
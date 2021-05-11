# public.res_groups_implied_rel

## Description

RELATION BETWEEN res_groups AND res_groups

## Columns

| Name | Type | Default | Nullable | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | -------- | ------- | ------- |
| gid | integer |  | false |  | [public.res_groups](public.res_groups.md) |  |
| hid | integer |  | false |  | [public.res_groups](public.res_groups.md) |  |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| res_groups_implied_rel_gid_fkey | FOREIGN KEY | FOREIGN KEY (gid) REFERENCES res_groups(id) ON DELETE CASCADE |
| res_groups_implied_rel_hid_fkey | FOREIGN KEY | FOREIGN KEY (hid) REFERENCES res_groups(id) ON DELETE CASCADE |
| res_groups_implied_rel_gid_hid_key | UNIQUE | UNIQUE (gid, hid) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| res_groups_implied_rel_gid_hid_key | CREATE UNIQUE INDEX res_groups_implied_rel_gid_hid_key ON public.res_groups_implied_rel USING btree (gid, hid) |
| res_groups_implied_rel_gid_idx | CREATE INDEX res_groups_implied_rel_gid_idx ON public.res_groups_implied_rel USING btree (gid) |
| res_groups_implied_rel_hid_idx | CREATE INDEX res_groups_implied_rel_hid_idx ON public.res_groups_implied_rel USING btree (hid) |

## Relations

![er](public.res_groups_implied_rel.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)
# OpnUC Asterisk 連携パッケージ

## 必要環境

- PBX
    - Asterisk

## 導入方法

## Asterisk側の設定

```
[general]
enabled = yes
;webenabled = yes
port = 5038
bindaddr = 0.0.0.0

[opnuc]
secret=opnuc
permit=192.168.0.0/24
read=all
write=all
```
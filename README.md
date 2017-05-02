# AvanaEvaluation

## Getting Started

1. composer install
2. php index.php excel:validate path/to/file Type_A/Type_B

## Sample
```
php index.php excel:validate Type_A.xlsx Type_A
+-----+------------------------------------------------------------------------------------------+
| Row | Error                                                                                    |
+-----+------------------------------------------------------------------------------------------+
| 3   | Missing value in Field_A, Field_B should not contain any space, Missing value in Field_D |
| 4   | Missing value in Field_A, Missing value in Field_E                                       |
+-----+------------------------------------------------------------------------------------------+
```
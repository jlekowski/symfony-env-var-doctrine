1. Start project
```bash
symfony new symfony-env-var-doctrine
```

2. Install ORM
```bash
composer req orm
```

3. Remove `DATABASE_URL` from `.env` - use default parameter

4. Add `ConsulEnvVarLoader`
```php
class ConsulEnvVarLoader implements EnvVarLoaderInterface
{
    public function loadEnvVars(): array
    {
        throw new \Exception('I cannot connect to Consul when you clear cache');
    }
}
```

5. Clear cache
```bash
rm -rf var/cache && bin/console cache:clear --no-warmup

In ConsulEnvVarLoader.php line 11:

  I cannot connect to Consul when you clear cache

```

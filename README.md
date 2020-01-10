1. Install ORM
```bash
composer req orm
```

2. Remove `DATABASE_URL` from `.env` - use default parameter

3. Add `ConsulEnvVarLoader`
```php
class ConsulEnvVarLoader implements EnvVarLoaderInterface
{
    public function loadEnvVars(): array
    {
        throw new \Exception('I cannot connect to Consul when you clear cache');
    }
}
```

4. Clear cache
```bash
rm -rf var/cache && bin/console cache:clear --no-warmup

In ConsulEnvVarLoader.php line 11:

  I cannot connect to Consul when you clear cache

```

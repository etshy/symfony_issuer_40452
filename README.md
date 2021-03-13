# symfony_issuer_40452


# Reproduction
Submit the form
Error dd() is showing because the form is not marked as submitted after `$form->handleRequest($request)`
Comment `framework.http_cache` in `framework.yaml` and the submission will work
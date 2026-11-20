# DomainNameAPI pour FOSSBilling

- Source officielle : https://github.com/domainreseller/fossbilling-dna
- Release installée : V4.0.6 (commit `fc3f3644ba42eb469df0ce495fdeba29a6f560b7`)
- Adaptateur livré dans `library/Registrar/Adapter/DomainNameApi.php`, avec son client REST embarqué dans `lib/`.
- PHP cURL et mbstring sont requis et présents dans l’environnement vérifié.

## Particularités locales

- Les rapports et métriques Sentry du client DomainNameAPI sont désactivés dans `getDna()` afin que les erreurs, domaines, identifiants de revendeur et informations serveur ne soient pas transmis à un service tiers.
- Les logs API/fonction sont désactivés par défaut; le répertoire de logs ignore les fichiers générés.
- L’enregistrement des domaines `.tr` est bloqué tant que FOSSBilling ne recueille pas les véritables attributs fiscaux et d’identité requis. Les valeurs fictives trouvées dans le code fournisseur ne sont jamais envoyées.

## Activation

L’adaptateur doit être activé dans l’administration FOSSBilling, section de gestion des domaines/registrars. Renseigner le **Reseller ID** et l’**API Key** fournis par DomainNameAPI, puis associer les TLD concernés à ce registrar. Ne pas utiliser les identifiants de connexion au panneau revendeur.

Pour le premier test, utiliser un compte et des identifiants OTE/test, activer le mode de test du registrar dans FOSSBilling, et ne pas rattacher le registrar de production au `.com` tant que les tests n’ont pas abouti.

## Compatibilité

La release V4.0.6 documente FOSSBilling 1.0 ou ultérieur. Cette installation est FOSSBilling 0.6.20 : la présence et le chargement PHP de l’adaptateur peuvent être vérifiés, mais l’usage en production n’est pas certifié avant mise à niveau ou validation complète sur une instance de test.

# Naked Dashboard

> Naked Dashboard removes all dashboard widgets, with exceptions.

Made at the request of Sé Reed on [WP Watercooler EP386](https://www.youtube.com/watch?v=zDxX5NW7a_4), a weekly WordPress podcast.

## Installation

1. Download the ZIP.
1. Extract the folder to `/wp-content/plugins/`.

or

```sh
cd /wp-content/plugins/
git clone https://github.com/Brugman/we-use-cookies.git
```

## Update

1. Download the new ZIP.
1. Replace the old folder in `/wp-content/plugins/`.

or

```sh
cd /wp-content/plugins/we-use-cookies/
git pull
```

## Optional configuration

### Manage exceptions

By default only the Site Health metabox remains. To remove this metabox, or keep others, edit the `$exceptions` array in the PHP file.

If you customize the exceptions, keep in mind that an update will reset these.

## Contributing

Found a bug? Anything you would like to ask, add or change? Please open an issue so we can talk about it.

Pull requests are welcome on the develop branch. Please try to match the current code formatting.

## Author

[Tim Brugman](https://github.com/Brugman)
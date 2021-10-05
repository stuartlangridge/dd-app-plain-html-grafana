# Obviously trivial Datadog widget example

Takes specified input value from the config (which graph to draw), and fetches a graph of that name from Wikimedia's Grafana output by hitting their API with PHP.

Clearly this is very simple indeed, but it works to demonstrate the principles of:

1. using simple plain HTML pages to be the Datadog app's controller and widget, with minimal JavaScript
2. reading the config and reacting to config changes from simple JS without needing a JS framework, by using a built single-file version of [ui-extensions-sdk](https://github.com/DataDog/ui-extensions-sdk/) (made with `yarn build` on that repo)
3. calling back end code to actually do work (in this case, simply proxy an image, but it could make any Grafana API call you wanted)


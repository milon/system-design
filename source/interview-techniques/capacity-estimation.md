---
title: Capacity Estimation
extends: _layouts.documentation
section: content
---

When designing a system, it's important to estimate the capacities required to deliver on the system's goals. This involves considering key metrics like throughput, bandwidth, and storage.

### Throughput

Throughput is a crucial metric that describes how many requests the system needs to handle in order to provide its core value proposition. Typically, throughput is expressed in requests per second, and it's important to distinguish between read and write requests.

For example, a platform like Netflix needs to handle a large volume of read requests, as every user client fetches several MBs of data per minute to ensure a consistent streaming experience. On the other hand, there are relatively few write requests sent to Netflix's servers, as only employees are authorized to upload new movies.

### Bandwidth

Bandwidth is another key metric that describes how much data needs to be sent over the network per second. This metric is influenced by both read and write requests, as well as the size of each request.

For instance, a file-sharing or collaboration app will likely require more bandwidth than a simple messaging app, as users need to send and receive large files in real-time. Similarly, a video-conferencing app will require a higher bandwidth to support clear audio and video communication.

### Storage

Finally, storage is a metric that estimates the storage capacity required to support the system's main purpose over a defined time horizon. Typically, this time horizon is around five years.

For example, a platform like Netflix requires a significant amount of storage space to host and serve its vast library of movies and TV shows. In contrast, a URL shortener like TinyURL only needs to store a few bytes per link, so it requires much less storage capacity.

By estimating these capacities, system designers can ensure that they're building a system that can handle the expected volume of requests, network traffic, and storage needs. With careful planning and consideration of these key metrics, designers can develop systems that meet the needs of users and provide an outstanding user experience.


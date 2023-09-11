---
title: Service
extends: _layouts.documentation
section: content
---

A service is a self-contained unit of functionality that can be accessed and used by other software components, typically through an API.

### Common Service Architecture Patterns:

-   [[Monolith]]: A single service that contains all of the functionality of an application, which can be difficult to scale and maintain.
-   [[Microservices]]: A collection of small, independent services that communicate with each other to provide the functionality of an application, which can be more flexible and scalable than a monolithic architecture.
-   [[Serverless]]: A model where developers write and deploy functions as individual services, which are executed and scaled automatically by a cloud provider, without having to manage server infrastructure.

### Common Service Protocols:

-   HTTP/HTTPS: The most common protocol for web-based services, using standard HTTP methods like GET, POST, PUT, and DELETE to interact with a service API.
-   REST: A common architectural style for web services that uses a set of constraints to enable efficient and scalable communication between clients and servers.
-   gRPC: An open-source, high-performance RPC framework that uses protocol buffers for efficient serialization and deserialization of data.

### Considerations When Using Services:

-   Service Design, as the design of services can have a significant impact on their functionality, scalability, and maintainability.
-   Service Discovery, as the location and availability of services needs to be discoverable by other components in the system.
-   Service Security, as services need to be secured against unauthorized access and data breaches.
-   Service Testing, as testing services can be more complex than testing monolithic applications and requires additional testing infrastructure and tools.
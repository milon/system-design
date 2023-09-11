---
title: Tier
extends: _layouts.documentation
section: content
---

The term "Tier" usually refers to layers or levels within a system architecture. Many modern software architectures are designed as multi-tier systems to distribute the different responsibilities and functionalities of an application among separate modules or components. This allows for more manageable, scalable, and maintainable systems. 

Here are the common tiers in multi-tier architectures:

1. **Single-Tier Architecture**: All the application components, including the user interface, application logic, and data storage, are in a single server or platform. It's the simplest form, and it's not typically used for complex or scalable applications.
2. **Two-Tier Architecture (Client-Server Architecture)**:
    - **Client Tier**: Contains the user interface and user input logic.
    - **Server Tier**: Hosts the database and the business logic related to data manipulation.
3. **Three-Tier Architecture**:
    - **Presentation Tier (or User Interface Tier)**: This is where the user interacts with the system. Typically, this would be a web browser, a desktop application, or a mobile app.
    - **Application Logic Tier (or Business Logic Tier)**: This is the layer where the business logic is processed. It interacts with the data tier to fetch or store data and presents it to the presentation tier.
    - **Data Tier**: This is where the data is stored, usually in a relational or NoSQL database.
4. **N-Tier (or Multi-Tier) Architecture**: This can have more than three tiers, where additional layers may be added for features like caching, message queues, or microservices.
5. **Microservices Architecture**: This can be seen as an evolution or subset of multi-tier architectures where each service (or tier) is a standalone application with a specific responsibility. Microservices can be developed, deployed, and scaled independently of each other.
# Load Balancer

A load balancer is a device or software program that distributes network traffic evenly among multiple servers to optimize resource utilization and prevent overload.

### Common Load Balancer Operations:

-   Traffic Distribution: Routing traffic across multiple servers to distribute the workload evenly
-   Health Checks: Monitoring the health of the servers and removing unhealthy servers from the traffic distribution
-   Session Persistence: Ensuring that a user's session remains on the same server for consistency
-   SSL Termination: Offloading SSL/TLS encryption from servers to the load balancer to reduce server load and improve performance

### Types of Load Balancers:

-   Hardware Load Balancer: A physical device that is dedicated to load balancing and can handle high volumes of traffic
-   Software Load Balancer: A software application that runs on a server and provides load balancing functionality
-   Cloud Load Balancer: A load balancer service provided by cloud providers such as AWS, Google Cloud, and Azure.

### Load Balancing Algorithms:

-   Round Robin: Distributing traffic across servers in a circular pattern
-   Least Connections: Routing traffic to the server with the fewest active connections
-   IP Hash: Using the client's IP address to determine which server to route traffic to

### Considerations When Using a Load Balancer:

-   Choosing the right load balancing algorithm based on your needs and requirements
-   [Scalability](/glossary/scalability.md), as load balancers need to be able to handle increasing traffic and server loads
-   Cost, as hardware load balancers can be expensive, and cloud load balancer costs can vary depending on usage
-   Security, as load balancers can be a potential target for attacks and need to be secured appropriately.
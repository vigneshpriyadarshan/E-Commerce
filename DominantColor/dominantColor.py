import cv2
from sklearn.cluster import KMeans
class DominantColors:
    CLUSTERS = None
    IMAGE = None
    COLORS = None
    LABELS = None
    def __init__(self, image, clusters = 3):
        self.CLUSTERS = clusters
        self.IMAGE = image
    def dominantColors(self):
        img = cv2.imread(self.IMAGE)
        img = cv2.cvtColor(img, cv2.COLOR_BGR2RGB)
        img = img.reshape((img.shape[0] * img.shape[1], 3))
        self.IMAGE = img
        kmeans = KMeans(n_clusters = self.CLUSTERS)
        kmeans.fit(img)
        self.COLORS = kmeans.cluster_centers_
        self.LABELS = kmeans.labels_
        return self.COLORS.astype(int)
img = '/Users/viki/Documents/Project/DominantColor/images/jpImage.png'
clusters = 3
dc = DominantColors(img, clusters)
colors = dc.dominantColors()
print(colors)
